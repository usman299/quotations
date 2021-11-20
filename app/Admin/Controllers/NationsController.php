<?php

namespace App\Admin\Controllers;

use App\Nations;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NationsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Nations';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Nations());

        $grid->column('id', __('Id'));
        $grid->column('nome', __('Nome'));
        $grid->column('codiceCatastale', __('CodiceCatastale'));
        $grid->column('XUE', __('XUE'));
        $grid->column('codicelStat', __('CodicelStat'));
        $grid->column('prefissoTelefonico', __('PrefissoTelefonico'));
        $grid->column('xBlackList', __('XBlackList'));
        $grid->column('codiceBlackList', __('CodiceBlackList'));
        $grid->column('codicelSo3', __('CodicelSo3'));
        // $grid->column('siglaAuto', __('SiglaAuto'));
        // $grid->column('note', __('Note'));
        // $grid->column('dataTrasferimento', __('DataTrasferimento'));
        // $grid->column('utente', __('Utente'));
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
        $show = new Show(Nations::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nome', __('Nome'));
        $show->field('codiceCatastale', __('CodiceCatastale'));
        $show->field('XUE', __('XUE'));
        $show->field('codicelStat', __('CodicelStat'));
        $show->field('prefissoTelefonico', __('PrefissoTelefonico'));
        $show->field('xBlackList', __('XBlackList'));
        $show->field('codiceBlackList', __('CodiceBlackList'));
        $show->field('codicelSo3', __('CodicelSo3'));
        $show->field('siglaAuto', __('SiglaAuto'));
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
        $form = new Form(new Nations());

        $form->text('nome', __('Nome'))->rules('required|min:3');
        $form->text('codiceCatastale', __('CodiceCatastale'))->rules('required|min:3');
        $form->text('XUE', __('XUE'))->rules('required|min:3');
        $form->text('codicelStat', __('CodicelStat'))->rules('required|min:3');
        $form->text('prefissoTelefonico', __('PrefissoTelefonico'))->rules('required|min:3');
        $form->text('xBlackList', __('XBlackList'))->rules('required|min:3');
        $form->text('codiceBlackList', __('CodiceBlackList'))->rules('required|min:3');
        $form->text('codicelSo3', __('CodicelSo3'))->rules('required|min:3');
        $form->text('siglaAuto', __('SiglaAuto'))->rules('required|min:3');
        $form->text('note', __('Note'))->rules('required|min:3');
        $form->text('dataTrasferimento', __('DataTrasferimento'))->rules('required|min:3');
        $form->text('utente', __('Utente'))->rules('required|min:3');
        $form->text('dataultimaModifica', __('DataultimaModifica'))->rules('required|min:3');

        return $form;
    }
}
