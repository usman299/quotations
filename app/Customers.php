<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
     protected $fillable = [
        'nome1', 'nome2', 'partitaIVA','codiceFiscale', 'indrizzo', 'numeroCivico','citta', 'cap', 'provincia','prefissoTelefono', 'telefono', 'localita','prefissoFax', 'fax', 'celulare','macroArea', 'zona', 'macroCategoria','raggruppamento', 'tipoSocieta', 'categoria','ABI', 'CAB', 'IBAN','pagamento', 'pagamento1', 'pagamento2','causaleTrasporto', 'regione', 'tipoClient','sconto1', 'sconto2', 'note','alAttenzione', 'web', 'detaCreazione','nazione', 'detiAggiuntiviCliente', 'sePersonaFisica','comuneNascita', 'provinciaNascita', 'provinciaNascita','dataNasta', 'sesso', 'sedeAmministrativa1','sedeAmministrativa2', 'sedeAmministrativa3', 'sedeAmministrativa4','seClienteK', 'seClienteKBloccato', 'detaTrasferimento','utente', 'dataUltimaModifica', 'email',
    ];
    
            
}
