<?php

namespace App\Admin\Controllers;

use App\Provinces;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProvincesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Provinces';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Provinces());

        $grid->column('id', __('Id'));
        $grid->column('nome', __('Nome'));
        $grid->column('regione', __('Regione'));
        $grid->column('codicelstat', __('Codicelstat'));
        $grid->column('note', __('Note'));
        $grid->column('dataTrasferimento', __('DataTrasferimento'));
        $grid->column('utente', __('Utente'));
        // $grid->column('dataultimaModifica', __('DataultimaModifica'));
        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Provinces::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nome', __('Nome'));
        $show->field('regione', __('Regione'));
        $show->field('codicelstat', __('Codicelstat'));
        $show->field('note', __('Note'));
        $show->field('dataTrasferimento', __('DataTrasferimento'));
        $show->field('utente', __('Utente'));
        $show->field('dataultimaModifica', __('DataultimaModifica'));
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
        $form = new Form(new Provinces());

        $form->text('nome', __('Nome'))->rules('required|min:3');
        $form->text('regione', __('Regione'))->rules('required|min:3');
        $form->text('codicelstat', __('Codicelstat'))->rules('required|min:3');
        $form->text('note', __('Note'))->rules('required|min:3');
        $form->text('dataTrasferimento', __('DataTrasferimento'))->rules('required|min:3');
        $form->text('utente', __('Utente'))->rules('required|min:3');
        $form->text('dataultimaModifica', __('DataultimaModifica'))->rules('required|min:3');

        return $form;
    }
}
