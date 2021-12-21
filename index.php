<?php
require_once "vendor/autoload.php" ;
// require_once("vendor/kaleu62/notafiscalsp/autoload.php");
// include "vendor/phpro/soap-client/bin/soap_client.php" ;

use NotaFiscalSP\NotaFiscal;
use NotaFiscalSP\Entities\Requests\NF\Period;

use NotaFiscalSP\Constants\FieldData\RPSType;
use NotaFiscalSP\Entities\Requests\NF\Rps;

$nfSP = new NotaFiscal([
    'cnpj' => '0000',
    'im' => '000',
    'certificate' => 'lorem.pfx',
    'certificatePass' => '0000'
]);
$rps = new Rps();
// numerico
$rps->setNumeroRps('');
$rps->setTipoRps(RPSType::RECIBO_PROVENIENTE_DE_NOTA_CONJUGADA);
$rps->setValorServicos(1.80);
$rps->setCodigoServico(1899);
$rps->setAliquotaServicos(0.00);
$rps->setCnpj('');
$rps->setRazaoSocialTomador('');
$rps->setTipoLogradouro('');
$rps->setLogradouro('');
$rps->setNumeroEndereco(1032);
$rps->setBairro('');
$rps->setCidade(''); // São Paulo
$rps->setUf('');
$rps->setCep('');
$rps->setEmailTomador('teste@email.com.br');
$rps->setDiscriminacao('Teste Emissão de Notas pela API');

$response =  $nfSP->enviarNota($rps);
