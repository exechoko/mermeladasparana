<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Agrega credenciales
//credencial de prueba
MercadoPago\SDK::setAccessToken('TEST-4257041938474812-051922-fd13db1235ff610f3e2a9137c1f5e645-204509389');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();
?>
