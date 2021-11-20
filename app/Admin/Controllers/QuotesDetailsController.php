<?php

namespace App\Admin\Controllers;

use App\QuotesDetails;
use App\Quotes;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class QuotesDetailsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'QuotesDetails';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new QuotesDetails());

        $grid->column('id', __('Id'));
        $grid->column('idpreventivo', __('Idpreventivo'));
        $grid->column('prezzo', __('Prezzo'));
        $grid->column('areaText', __('AreaText'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(QuotesDetails::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('idpreventivo', __('Idpreventivo'));
        $show->field('prezzo', __('Prezzo'));
        $show->field('areaText', __('AreaText'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new QuotesDetails());
         //Select
        $nat = Quotes::get()->pluck('data','data');
        $select = $nat->toArray();
        $form->select('idpreventivo')->options($select)->rules('required');
        //endselect
        
        $form->text('prezzo', __('Prezzo'))->rules('required|min:3');
        $form->text('areaText', __('AreaText'))->rules('required|min:3');;

        return $form;
    }
}
