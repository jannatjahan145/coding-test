<?php

namespace App\Http\Controllers;

use App\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductsController extends Controller
{
    private ProductRepositoryInterface $ProductRepository;

    public function __construct(ProductRepositoryInterface $ProductRepository) 
    {
        $this->ProductRepository = $ProductRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->ProductRepository->getAllProducts()
        ]);
    }

    public function store(Request $request): JsonResponse 
    {
        $productDetails = $request->only([
            'name',
            'description',
            'photo',
            'price'
        ]);

        return response()->json(
            [
                'data' => $this->ProductRepository->createProduct($productDetails)
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request): JsonResponse 
    {
        $productId = $request->route('id');

        return response()->json([
            'data' => $this->ProductRepository->getProductById($productId)
        ]);
    }

    public function update(Request $request): JsonResponse 
    {
        $productId = $request->route('id');
        $productDetails = $request->only([
            'name',
            'description',
            'photo',
            'price'
        ]);

        return response()->json([
            'data' => $this->ProductRepository->updateProduct($productId, $productDetails)
        ]);
    }

    public function destroy(Request $request): JsonResponse 
    {
        $productId = $request->route('id');
        $this->ProductRepository->deleteProduct($productId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
