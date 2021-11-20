<?php

namespace App\Admin\Controllers;

use App\Customers;
use App\Cities;
use App\Macrocategories;
use App\Groupings;
use App\Categories;
use App\Paymentmethods;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CustomersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Customers';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Customers());

        $grid->column('id', __('Id'));
        $grid->column('nome', __('Nome'));
        $grid->column('nome1', __('Nome1'));
        $grid->column('nome2', __('Nome2'));
        $grid->column('partitaIVA', __('PartitaIVA'));
        $grid->column('codiceFiscale', __('CodiceFiscale'));
        $grid->column('indrizzo', __('Indrizzo'));
        $grid->column('numeroCivico', __('NumeroCivico'));
        $grid->column('citta', __('Citta'));
        $grid->column('cap', __('Cap'));
        $grid->column('provincia', __('Provincia'));
        $grid->column('prefissoTelefono', __('PrefissoTelefono'));
        // $grid->column('telefono', __('Telefono'));
        // $grid->column('localita', __('Localita'));
        // $grid->column('prefissoFax', __('PrefissoFax'));
        // $grid->column('fax', __('Fax'));
        // $grid->column('celulare', __('Celulare'));
        // $grid->column('macroArea', __('MacroArea'));
        // $grid->column('zona', __('Zona'));
        // $grid->column('macroCategoria', __('MacroCategoria'));
        // $grid->column('raggruppamento', __('Raggruppamento'));
        // $grid->column('tipoSocieta', __('TipoSocieta'));
        // $grid->column('categoria', __('Categoria'));
        // $grid->column('ABI', __('ABI'));
        // $grid->column('CAB', __('CAB'));
        // $grid->column('IBAN', __('IBAN'));
        // $grid->column('pagamento', __('Pagamento'));
        // $grid->column('pagamento1', __('Pagamento1'));
        // $grid->column('pagamento2', __('Pagamento2'));
        // $grid->column('causaleTrasporto', __('CausaleTrasporto'));
        // $grid->column('regione', __('Regione'));
        // $grid->column('tipoClient', __('TipoClient'));
        // $grid->column('sconto1', __('Sconto1'));
        // $grid->column('sconto2', __('Sconto2'));
        // $grid->column('note', __('Note'));
        // $grid->column('alAttenzione', __('AlAttenzione'));
        // $grid->column('web', __('Web'));
        // $grid->column('detaCreazione', __('DetaCreazione'));
        // $grid->column('nazione', __('Nazione'));
        // $grid->column('detiAggiuntiviCliente', __('DetiAggiuntiviCliente'));
        // $grid->column('valuta', __('Valuta'));
        // $grid->column('detalnizloDisuso', __('DetalnizloDisuso'));
        // $grid->column('sePersonaFisica', __('SePersonaFisica'));
        // $grid->column('comuneNascita', __('ComuneNascita'));
        // $grid->column('provinciaNascita', __('ProvinciaNascita'));
        // $grid->column('dataNasta', __('DataNasta'));
        // $grid->column('sesso', __('Sesso'));
        // $grid->column('sedeAmministrativa1', __('SedeAmministrativa1'));
        // $grid->column('sedeAmministrativa2', __('SedeAmministrativa2'));
        // $grid->column('sedeAmministrativa3', __('SedeAmministrativa3'));
        // $grid->column('sedeAmministrativa4', __('SedeAmministrativa4'));
        // $grid->column('seClienteK', __('SeClienteK'));
        // $grid->column('seClienteKBloccato', __('SeClienteKBloccato'));
        // $grid->column('detaTrasferimento', __('DetaTrasferimento'));
        // $grid->column('utente', __('Utente'));
        // $grid->column('dataUltimaModifica', __('DataUltimaModifica'));
        // $grid->column('email', __('Email'));
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
        $show = new Show(Customers::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nome', __('Nome'));
        $show->field('nome1', __('Nome1'));
        $show->field('nome2', __('Nome2'));
        $show->field('partitaIVA', __('PartitaIVA'));
        $show->field('codiceFiscale', __('CodiceFiscale'));
        $show->field('indrizzo', __('Indrizzo'));
        $show->field('numeroCivico', __('NumeroCivico'));
        $show->field('citta', __('Citta'));
        $show->field('cap', __('Cap'));
        $show->field('provincia', __('Provincia'));
        $show->field('prefissoTelefono', __('PrefissoTelefono'));
        $show->field('telefono', __('Telefono'));
        $show->field('localita', __('Localita'));
        $show->field('prefissoFax', __('PrefissoFax'));
        $show->field('fax', __('Fax'));
        $show->field('celulare', __('Celulare'));
        $show->field('macroArea', __('MacroArea'));
        $show->field('zona', __('Zona'));
        $show->field('macroCategoria', __('MacroCategoria'));
        $show->field('raggruppamento', __('Raggruppamento'));
        $show->field('tipoSocieta', __('TipoSocieta'));
        $show->field('categoria', __('Categoria'));
        $show->field('ABI', __('ABI'));
        $show->field('CAB', __('CAB'));
        $show->field('IBAN', __('IBAN'));
        $show->field('pagamento', __('Pagamento'));
        $show->field('pagamento1', __('Pagamento1'));
        $show->field('pagamento2', __('Pagamento2'));
        $show->field('causaleTrasporto', __('CausaleTrasporto'));
        $show->field('regione', __('Regione'));
        $show->field('tipoClient', __('TipoClient'));
        $show->field('sconto1', __('Sconto1'));
        $show->field('sconto2', __('Sconto2'));
        $show->field('note', __('Note'));
        $show->field('alAttenzione', __('AlAttenzione'));
        $show->field('web', __('Web'));
        $show->field('detaCreazione', __('DetaCreazione'));
        $show->field('nazione', __('Nazione'));
        $show->field('detiAggiuntiviCliente', __('DetiAggiuntiviCliente'));
        $show->field('valuta', __('Valuta'));
        $show->field('detalnizloDisuso', __('DetalnizloDisuso'));
        $show->field('sePersonaFisica', __('SePersonaFisica'));
        $show->field('comuneNascita', __('ComuneNascita'));
        $show->field('provinciaNascita', __('ProvinciaNascita'));
        $show->field('dataNasta', __('DataNasta'));
        $show->field('sesso', __('Sesso'));
        $show->field('sedeAmministrativa1', __('SedeAmministrativa1'));
        $show->field('sedeAmministrativa2', __('SedeAmministrativa2'));
        $show->field('sedeAmministrativa3', __('SedeAmministrativa3'));
        $show->field('sedeAmministrativa4', __('SedeAmministrativa4'));
        $show->field('seClienteK', __('SeClienteK'));
        $show->field('seClienteKBloccato', __('SeClienteKBloccato'));
        $show->field('detaTrasferimento', __('DetaTrasferimento'));
        $show->field('utente', __('Utente'));
        $show->field('dataUltimaModifica', __('DataUltimaModifica'));
        $show->field('email', __('Email'));
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
        $form = new Form(new Customers());

        $form->text('nome', __('Nome'))->rules('required|min:3');
        $form->text('nome1', __('Nome1'))->rules('required|min:3');
        $form->text('nome2', __('Nome2'))->rules('required|min:3');
        $form->text('partitaIVA', __('PartitaIVA'))->rules('required|min:3');
        $form->text('codiceFiscale', __('CodiceFiscale'))->rules('required|min:3');
        $form->text('indrizzo', __('Indrizzo'))->rules('required|min:3');
        $form->text('numeroCivico', __('NumeroCivico'))->rules('required|min:3');
         //Select
         $nat = Cities::get()->pluck('nome','nome');
         $select = $nat->toArray();
         $form->select('citta')->options($select)->rules('required');
         //endselect
         
        // $form->text('cap', __('Cap'));
         //Select
         $nat = Cities::get()->pluck('nome','nome');
         $select = $nat->toArray();
         $form->select('cap')->options($select)->rules('required');
         //endselect
        // $form->text('provincia', __('Provincia'));
        //Select
        $nat = Cities::get()->pluck('nome','nome');
        $select = $nat->toArray();
        $form->select('provincia')->options($select)->rules('required');
        //endselect
        $form->text('prefissoTelefono', __('PrefissoTelefono'))->rules('required|min:3');
        $form->text('telefono', __('Telefono'))->rules('required|min:3');
        $form->text('localita', __('Localita'))->rules('required|min:3');
        $form->text('prefissoFax', __('PrefissoFax'))->rules('required|min:3');
        $form->text('fax', __('Fax'))->rules('required|min:3');
        $form->text('celulare', __('Celulare'))->rules('required|min:3');
        $form->text('macroArea', __('MacroArea'))->rules('required|min:3');
        $form->text('zona', __('Zona'))->rules('required|min:3');
        //Select
        $nat = Macrocategories::get()->pluck('nome','nome');
        $select = $nat->toArray();
        $form->select('macroCategoria')->options($select)->rules('required');
        //endselect

         //Select
         $nat = Groupings::get()->pluck('nome','nome');
         $select = $nat->toArray();
         $form->select('raggruppamento')->options($select)->rules('required');
         //endselect
        
        $form->text('tipoSocieta', __('TipoSocieta'))->rules('required|min:3');;
         //Select
         $nat = Categories::get()->pluck('nome','nome');
         $select = $nat->toArray();
         $form->select('categoria')->options($select)->rules('required');
         //endselect
        
        $form->text('ABI', __('ABI'))->rules('required|min:3');
        $form->text('CAB', __('CAB'))->rules('required|min:3');
        $form->text('IBAN', __('IBAN'))->rules('required|min:3');
        //Select
        $nat = Paymentmethods::get()->pluck('nome','nome');
        $select = $nat->toArray();
        $form->select('pagamento')->options($select)->rules('required');
        //endselect
        //Select
        $nat = Paymentmethods::get()->pluck('nome','nome');
        $select = $nat->toArray();
        $form->select('pagamento1')->options($select)->rules('required');
        //endselect
        //Select
        $nat = Paymentmethods::get()->pluck('nome','nome');
        $select = $nat->toArray();
        $form->select('pagamento2')->options($select)->rules('required');
        //endselect
        
        $form->text('causaleTrasporto', __('CausaleTrasporto'))->rules('required|min:3');
        $form->text('regione', __('Regione'))->rules('required|min:3');
        $form->text('tipoClient', __('TipoClient'))->rules('required|min:3');
        $form->text('sconto1', __('Sconto1'))->rules('required|min:3');
        $form->text('sconto2', __('Sconto2'))->rules('required|min:3');
        $form->text('note', __('Note'))->rules('required|min:3');
        $form->text('alAttenzione', __('AlAttenzione'))->rules('required|min:3');
        $form->text('web', __('Web'))->rules('required|min:3');
        $form->text('detaCreazione', __('DetaCreazione'))->rules('required|min:3');
        $form->text('nazione', __('Nazione'))->rules('required|min:3');
        $form->text('detiAggiuntiviCliente', __('DetiAggiuntiviCliente'))->rules('required|min:3');
        $form->text('valuta', __('Valuta'))->rules('required|min:3');
        $form->text('detalnizloDisuso', __('DetalnizloDisuso'))->rules('required|min:3');
        $form->text('sePersonaFisica', __('SePersonaFisica'))->rules('required|min:3');
        $form->text('comuneNascita', __('ComuneNascita'))->rules('required|min:3');
        $form->text('provinciaNascita', __('ProvinciaNascita'))->rules('required|min:3');
        $form->text('dataNasta', __('DataNasta'))->rules('required|min:3');
        $form->text('sesso', __('Sesso'))->rules('required|min:3');
        $form->text('sedeAmministrativa1', __('SedeAmministrativa1'))->rules('required|min:3');
        $form->text('sedeAmministrativa2', __('SedeAmministrativa2'))->rules('required|min:3');
        $form->text('sedeAmministrativa3', __('SedeAmministrativa3'))->rules('required|min:3');
        $form->text('sedeAmministrativa4', __('SedeAmministrativa4'))->rules('required|min:3');
        $form->text('seClienteK', __('SeClienteK'))->rules('required|min:3');
        $form->text('seClienteKBloccato', __('SeClienteKBloccato'))->rules('required|min:3');
        $form->text('detaTrasferimento', __('DetaTrasferimento'))->rules('required|min:3');
        $form->text('utente', __('Utente'))->rules('required|min:3');
        $form->text('dataUltimaModifica', __('DataUltimaModifica'))->rules('required|min:3');
        $form->email('email', __('Email'))->rules('required|min:3');

        return $form;
    }
}
