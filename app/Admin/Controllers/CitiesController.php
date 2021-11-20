<?php

namespace App\Admin\Controllers;

use App\Cities;
use App\Nations;
use App\Provinces;
use App\Regions;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CitiesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Cities';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Cities());

        $grid->column('id', __('Id'));
        $grid->column('nome', __('Nome'));
        $grid->column('codiceCatastale', __('CodiceCatastale'));
        $grid->column('CAP', __('CAP'));
        $grid->column('provincia', __('Provincia'));
        $grid->column('regione', __('Regione'));
        $grid->column('prefissoTelefonico', __('PrefissoTelefonico'));
        $grid->column('codicelSTAT', __('CodicelSTAT'));
        $grid->column('nazione', __('Nazione'));
        $grid->column('note', __('Note'));
        // $grid->column('CAPCittaProvincia', __('CAPCittaProvincia'));
        // $grid->column('xHaStradario', __('XHaStradario'));
        // $grid->column('xViaZona', __('XViaZona'));
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
        $show = new Show(Cities::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nome', __('Nome'));
        $show->field('codiceCatastale', __('CodiceCatastale'));
        $show->field('CAP', __('CAP'));
        $show->field('provincia', __('Provincia'));
        $show->field('regione', __('Regione'));
        $show->field('prefissoTelefonico', __('PrefissoTelefonico'));
        $show->field('codicelSTAT', __('CodicelSTAT'));
        $show->field('nazione', __('Nazione'));
        $show->field('note', __('Note'));
        $show->field('CAPCittaProvincia', __('CAPCittaProvincia'));
        $show->field('xHaStradario', __('XHaStradario'));
        $show->field('xViaZona', __('XViaZona'));
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
        $form = new Form(new Cities());

        $form->text('nome', __('Nome'))->rules('required|min:3');
        $form->text('codiceCatastale', __('CodiceCatastale'))->rules('required|min:3');
        $form->text('CAP', __('CAP'))->rules('required|min:3');
         //Select
         $nat = Provinces::get()->pluck('codicelstat','codicelstat');
         $select = $nat->toArray();
         $form->select('provincia')->options($select)->rules('required');
         //endselect
        //Select
        $nat = Regions::get()->pluck('sigla','sigla');
        $select = $nat->toArray();
        $form->select('regione')->options($select)->rules('required');
        //endselect
        $form->text('prefissoTelefonico', __('PrefissoTelefonico'));
        $form->text('codicelSTAT', __('CodicelSTAT'));
       
        //Select
        $nat = Nations::get()->pluck('XUE','XUE');
        $select = $nat->toArray();
        $form->select('nazione')->options($select)->rules('required');
        //endselect
        $form->text('note', __('Note'))->rules('required|min:3');
        $form->text('CAPCittaProvincia', __('CAPCittaProvincia'))->rules('required|min:3');
        $form->text('xHaStradario', __('XHaStradario'))->rules('required|min:3');
        $form->text('xViaZona', __('XViaZona'))->rules('required|min:3');
        $form->text('dataTrasferimento', __('DataTrasferimento'))->rules('required|min:3');
        $form->text('utente', __('Utente'))->rules('required|min:3');
        $form->text('dataultimaModifica', __('DataultimaModifica'))->rules('required|min:3');
  
        return $form;
    }
}
