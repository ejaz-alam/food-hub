<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Traits\FileUploadTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use FileUploadTrait;
    public function __construct(
        private readonly \App\Models\Slider $sliderModel,
        private readonly \App\Service\MessageManager\Messages $messageManager
    )
    {}

    /**
     * Display a listing of the resource.
     */
    public function execute(\App\DataTables\SliderDataTable $sliderDataTable)
    {
        return $sliderDataTable->render('admin.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(\App\Http\Requests\Frontend\Slider\SliderCreateRequest $sliderCreateRequest)
    {
        if ($sliderCreateRequest->all()) {
            $model = $this->sliderModel;
            $image = $this->uploadFile($sliderCreateRequest, 'image');
            $model->image = $image;
            $model->offer_tag = $sliderCreateRequest->offer_tag;
            $model->title = $sliderCreateRequest->title;
            $model->sub_title = $sliderCreateRequest->sub_title;
            $model->short_description = $sliderCreateRequest->short_description;
            $model->redirection_link = $sliderCreateRequest->redirection_link;
            $model->sort_order = $sliderCreateRequest->sort_order;
            try {
                $model->save();
                $this->messageManager->addSuccessMessage('Slider added successfully');
            } catch (\Exception $exception) {
                $this->messageManager->addErrorMessage('Something went wrong while adding Slider. Error Code: ' . $exception->getCode());
                return redirect()->route('admin.slider.create.new');
            }
            return redirect()->route('admin.slider');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
