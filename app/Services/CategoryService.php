<?php

namespace App\Services;

use App\Repositories\CategoryRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CategoryService
{
    private CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function createCategory($data)
    {
        $category = $this->categoryRepository->save($data);

        return $category;
    }

    public function getAllCategories()
    {
        return $this->categoryRepository->getAll();
    }

    public function getAllById($id)
    {
        $category = $this->categoryRepository->getById($id);

        if (empty($category)) {
            throw new ModelNotFoundException("Category not found.");
        }

        return $category;
    }

    public function updateCategory($id, $data)
    {
        $category = $this->categoryRepository->getById($id);

        if (empty($category)) {
            throw new ModelNotFoundException("Category not found.");
        }

        return $this->categoryRepository->update($id, $data);
    }

    public function deleteCategory($id)
    {
        $category = $this->categoryRepository->getById($id);

        if (empty($category)) {
            throw new ModelNotFoundException("Category not found.");
        }

        $this->categoryRepository->delete($id);
    }
}
