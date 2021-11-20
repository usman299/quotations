<?php

namespace App\Admin\Controllers;

use App\Quotes;
use App\Customers;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class QuotesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Quotes';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Quotes());

        $grid->column('id', __('Id'));
        $grid->column('data', __('Data'));
        $grid->column('cliente', __('Cliente'));
        $grid->column('note', __('Note'));
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
        $show = new Show(Quotes::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('data', __('Data'));
        $show->field('cliente', __('Cliente'));
        $show->field('note', __('Note'));
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
        $form = new Form(new Quotes());

        $form->text('data', __('Data'))->rules('required|min:3');
        //Select
        $nat = Customers::get()->pluck('nome','nome');
        $select = $nat->toArray();
        $form->select('cliente')->options($select)->rules('required');
        //endselect
        
        $form->text('note', __('Note'))->rules('required|min:3');

        return $form;
    }
}
