<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterStoreRequest;
use App\Http\Requests\NewsletterUpdateRequest;
use App\Models\Newsletter;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class NewsletterViewController extends Controller
{
    public function index(): View
    {
        $newsletters = Newsletter::all();
        return view('newsletters.index', compact('newsletters'));
    }

    public function create(): View
    {
        return view('newsletters.create');
    }

    public function store(NewsletterStoreRequest $request): RedirectResponse
    {
        Newsletter::create($request->validated());
        return redirect()->route('newsletters.index')->with('success', 'Newsletter ajoutée.');
    }

    public function edit($id): View
    {
        $newsletter = Newsletter::findOrFail($id);
        return view('newsletters.edit', compact('newsletter'));
    }

    public function update(NewsletterUpdateRequest $request, $id): RedirectResponse
    {
        $newsletter = Newsletter::findOrFail($id);
        $newsletter->update($request->validated());
        return redirect()->route('newsletters.index')->with('success', 'Newsletter mise à jour.');
    }

    public function delete($id): RedirectResponse
    {
        Newsletter::findOrFail($id)->delete();
        return redirect()->route('newsletters.index')->with('success', 'Newsletter supprimée.');
    }
}
