
// Switch

const metodoPago = 'tarjeta';

switch (metodoPago) {
    case 'tarjeta':
        console.log('Pagaste con tarjeta');
        break;
    case 'transferencia':
        console.log('Pagaste con transferencia');
        break;
    case 'cheque':
        console.log('El usuario va a pagar con cheque. revisaremos los fondos primero.');
        break;
    case 'efectivo':
        console.log('Pagaste con efectivo');
        break;
    default:
        console.log('No se encontró su método de pago');
        
}