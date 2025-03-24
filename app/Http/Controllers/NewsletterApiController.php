<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterStoreRequest;
use App\Http\Requests\NewsletterUpdateRequest;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class NewsletterApiController extends Controller
{
    public function getNewsletters(): JsonResponse
    {
        return response()->json(Newsletter::all());
    }

    public function getNewsletter($id): JsonResponse
    {
        return response()->json(Newsletter::findOrFail($id));
    }

    public function createNewsletter(NewsletterStoreRequest $request): JsonResponse
    {
        $newsletter = Newsletter::create($request->validated());
        return response()->json($newsletter, 201);
    }

    public function updateNewsletter(NewsletterUpdateRequest $request, $id): JsonResponse
    {
        $newsletter = Newsletter::findOrFail($id);
        $newsletter->update($request->validated());
        return response()->json($newsletter);
    }

    public function deleteNewsletter($id): JsonResponse
    {
        Newsletter::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
