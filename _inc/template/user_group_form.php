<?php
$permissions = array(
  'Reportes' => array(
    'read_recent_activities' => 'Actividades recientes', 
    'read_dashboard_accounting_report' => 'Informe de contabilidad del tablero', 
    'read_sell_report' => 'Reporte de Ventas', 
    'read_overview_report' => 'Informe General', 
    'read_collection_report' => 'Reporte de Recopilación.',
    'read_full_collection_report' => 'Reporte Completo de Recopilación.',
    'read_customer_due_collection_report' => 'Reporte de cobro pendiente al Cliente.',
    'read_supplier_due_paid_report' => 'Informe Pagado por el Proveedor.',
    'read_analytics' => 'Visualizar Analítica.', 
    'read_overview_report' => 'Informe General.',
    'read_purchase_report' => 'Informe de Compras.',
    'read_purchase_payment_report' => 'Informe de Pago de Compras.',
    'read_purchase_tax_report' => 'Reporte de impuestos de Compra.',
    'read_sell_payment_report' => 'Informe de Pago de Venta.',
    'read_sell_tax_report' => 'Informe de impuestos de venta.',
    'read_tax_overview_report' => 'Informe General de Impuestos',
    'read_stock_report' => 'Informe de Existencias',
    'send_report_via_email' => 'Enviar informe por correo electrónico',
  ),
  'Contabilidad' => array(
    'withdraw' => 'Retirar',
    'deposit' => 'Depositar',
    'transfer' => 'Transferir',
    'read_bank_account' => 'Ver cuenta Bancaria',
    'read_bank_account_sheet' => 'Ver hoja de cuenta bancaria',
    'read_bank_transfer' => 'Ver transferencia bancaria',
    'read_bank_transactions' => 'Ver transacciones bancarias',
    'read_income_source' => 'Ver fuente de ingresos',
    'create_bank_account' => 'Crear cuenta bancaria',
    'update_bank_account' => 'Actualizar cuenta bancaria',
    'delete_bank_account' => 'Eliminar cuenta bancaria',
    'create_income_source' => 'Crear fuente de ingresos',
    'update_income_source' => 'Actualizar fuente de ingresos',
    'delete_income_source' => 'Eliminar fuente de ingresos',
    'read_income_monthwise' => 'Ingresos mensuales',
    'read_income_monthwise' => 'Ingresos mensuales',
    'read_income_and_expense_report' => 'Ingresos y gastos',
    'read_profit_and_loss_report' => 'Pérdidas y ganancias',
    'read_cashbook_report' => 'Libro de caja',
  ),
  'Cotizaciones' => array(
    'read_quotation' => 'Ver Cotizacones',
    'create_quotation' => 'Crear Cotización',
    'update_quotation' => 'Actualizar cotización',
    'delete_quotation' => 'Eliminar cotización',
  ),
  'PagosenCuotas' => array(
    'read_installment' => 'Leer lista de cuotas',
    'create_installment' => 'Crear Cuota',
    'update_installment' => 'Actualizar cuota',
    'delete_installment' => 'Eliminar cuota',
    'installment_payment' => 'Pago a plazos',
    'installment_overview' => 'Resumen de cuotas',
  ),
  'Gastos' => array(
    'read_expense' => 'Leer gasto',
    'create_expense' => 'Crear Gasto',
    'update_expense' => 'Actualizar gastos',
    'delete_expense' => 'Borrar gasto',
    'read_expense_category' => 'Leer categoría de gastos',
    'create_expense_category' => 'Crear categoría de gastos',
    'update_expense_category' => 'Actualizar categoría de gastos',
    'delete_expense_category' => 'Eliminar categoría de gastos',
    'read_expense_monthwise' => 'Gastos Mensuales',
    'read_expense_summary' => 'Resumen de gastos',
  ),
  'Ventas' => array(
    'read_sell_invoice' => 'Ver factura de venta',
    'read_sell_list' => 'Ver lista de venta',
    'create_sell_invoice' => 'Crear venta',
    'update_sell_invoice_info' => 'Actualizar información',
    'delete_sell_invoice' => 'Eliminar venta',
    'sell_payment' => 'Vender pago',
    'create_sell_due' => 'Crear vencimiento',
    'create_sell_return' => 'Crear devolución',
    'read_sell_return' => 'Ver lista de devoluciones',
    'update_sell_return' => 'Actualizar devolución',
    'delete_sell_return' => 'Eliminar devolución',
    'sms_sell_invoice' => 'Enviar factura de venta por SMS',
    'email_sell_invoice' => 'Enviar factura de venta por correo electrónico',
    'read_sell_log' => 'Leer registro de venta',
  ),
  'Compras' => array(
    'create_purchase_invoice' => 'Crear factura',
    'read_purchase_list' => 'Ver lista de facturas',
    'update_purchase_invoice_info' => 'Actualizar información',
    'delete_purchase_invoice' => 'Eliminar factura',
    'purchase_payment' => 'Pago',
    'create_purchase_due' => 'Crear vencimiento',
    'create_purchase_return' => 'Crear devolución',
    'read_purchase_return' => 'Ver lista de devoluciones',
    'update_purchase_return' => 'Actualizar devolución',
    'delete_purchase_return' => 'Eliminar devolución',
    'read_purchase_log' => 'Leer registro de compras',
  ),
  'Transferencias' => array(
    'read_transfer' => 'Ver Transferencia',
    'add_transfer' => 'Agregar transferencia',
    'update_transfer' => 'Actualizar transferencia',
    'delete_transfer' => 'Eliminar Transferencia',
  ),
  'TarjetaRegalo' => array(
    'read_giftcard' => 'Ver tarjeta de regalo',
    'add_giftcard' => 'Agregar tarjeta de regalo',
    'update_giftcard' => 'Actualizar tarjeta de regalo',
    'delete_giftcard' => 'Eliminar tarjeta de regalo',
    'giftcard_topup' => 'Recarga de tarjeta de regalo',
    'read_giftcard_topup' => 'Leer recarga de tarjeta de regalo',
    'delete_giftcard_topup' => 'Eliminar recarga de tarjeta de regalo',
  ),
  'Producto' => array(
    'read_product' => 'Ver lista de productos',
    'create_product' => 'Crear producto',
    'update_product' => 'Actualizar producto',
    'delete_product' => 'Eliminar producto',
    'import_product' => 'Importar producto',
    'product_bulk_action' => 'Acción masiva del producto',
    'delete_all_product' => 'Eliminar todo el producto',
    'read_category' => 'Leer lista de categorías',
    'create_category' => 'Crear categoría',
    'update_category' => 'Actualizar categoría',
    'delete_category' => 'Eliminar categoría',
    'read_stock_alert' => 'Leer alerta de stock',
    'read_expired_product' => 'Leer lista de productos caducados',
    'barcode_print' => 'Impresión de código de barras',
    'restore_all_product' => 'Restaurar todo el producto',
  ),
  'Proveedor' => array(
    'read_supplier' => 'Ver lista de proveedores',
    'create_supplier' => 'Crear Proveedor',
    'update_supplier' => 'Actualizar proveedor',
    'delete_supplier' => 'Eliminar Proveedor',
    'read_supplier_profile' => 'Leer perfil de proveedor',
  ),
  'Marca' => array(
    'read_brand' => 'Leer lista de marcas',
    'create_brand' => 'Crear marca',
    'update_brand' => 'Actualizar marca',
    'delete_brand' => 'Eliminar marca',
    'read_brand_profile' => 'Leer perfil de marca',
  ),
  'Cajatienda' => array(
    'read_box' => 'Ver cajas',
    'create_box' => 'Crear caja',
    'update_box' => 'Actualizar Caja',
    'delete_box' => 'Borrar caja',
  ),
  'Unidad' => array(
    'read_unit' => 'Ver unidad',
    'create_unit' => 'Crear unidad',
    'update_unit' => 'Actualizar unidad',
    'delete_unit' => 'Borrar Unidad',
  ),
  'TasaImpuesto' => array(
    'read_taxrate' => 'Ver Tasa de Impuesto',
    'create_taxrate' => 'Crear Tasa de Impuesto',
    'update_taxrate' => 'Actualizar Tasa de Impuesto',
    'delete_taxrate' => 'Borrar Tasa de Impuesto',
  ),
  'Préstamo' => array(
    'read_loan' => 'Ver préstamo',
    'read_loan_summary' => 'Leer resumen de préstamo',
    'take_loan' => 'Tomar préstamo',
    'update_loan' => 'Actualizar préstamo',
    'delete_loan' => 'Eliminar préstamo',
    'loan_pay' => 'Pago del préstamo',
  ),
  'Cliente' => array(
    'read_customer' => 'Ver lista de clientes',
    'read_customer_profile' => 'Leer perfil de cliente',
    'create_customer' => 'Crear Cliente',
    'update_customer' => 'Actualizar Cliente',
    'delete_customer' => 'Eliminar Cliente',
    'add_customer_balance' => 'Añadir Saldo',
    'substract_customer_balance' => 'Restar Saldo',
    'read_customer_transaction' => 'Leer lista de transacciones'
  ),
  'Usuario' => array(
    'read_user' => 'Ver lista de usuarios',
    'create_user' => 'Crear usuario',
    'update_user' => 'Actualizar usuario',
    'delete_user' => 'Eliminar Usuario',
    'change_password' => 'Cambiar su contraseña',
  ),
  'GrupodeUsuarios' => array(
    'read_usergroup' => 'Ver lista de grupos de usuarios',
    'create_usergroup' => 'Crear grupo de usuarios',
    'update_usergroup' => 'Actualizar grupo de usuarios',
    'delete_usergroup' => 'Eliminar grupo de usuarios',
  ),
  'Moneda' => array(
    'read_currency' => 'Ver moneda',
    'create_currency' => 'Agregar moneda',
    'update_currency' => 'Actualizar moneda',
    'change_currency' => 'Cambiar moneda',
    'delete_currency' => 'Borrar moneda',
  ),
  'AdministradordeArchivos' => array(
    'read_filemanager' => 'Ver Administrador de Archivos',
  ),
  'MetodoPago' => array(
    'read_pmethod' => 'Ver lista de métodos de pago',
    'create_pmethod' => 'Crear método de pago',
    'update_pmethod' => 'Actualizar método de pago',
    'delete_pmethod' => 'Eliminar método de pago',
    'updadte_pmethod_status' => 'Activo/Inactivo',
  ),
  'Tienda' => array(
    'read_store' => 'Ver lista de tiendas',
    'create_store' => 'Crear tienda',
    'update_store' => 'Actualizar tienda',
    'delete_store' => 'Eliminar tienda',
    'activate_store' => 'Activar Tienda',
    'upload_favicon' => 'Subir Icono',
    'upload_logo' => 'Subir logotipo',
  ),
  'Impresora' => array(
    'read_printer' => 'Ver impresora',
    'create_printer' => 'Agregar impresora',
    'update_printer' => 'Actualizar impresora',
    'delete_printer' => 'Eliminar impresora',
  ),
  'MensajedeTexto' => array(
    'send_sms' => 'Enviar SMS',
    'read_sms_report' => 'Ver informe SMS',
    'read_sms_setting' => 'Ver configuración de SMS',
    'update_sms_setting' => 'Actualizar configuración de SMS',
  ),
  'MensajedeTextoCorreo' => array(
    'send_email' => 'Enviar Correo',
  ),
  'Idioma' => array(
    'read_language' => 'Ver idioma',
    'create_language' => 'Agregar idioma',
    'update_language' => 'Editar información de idioma',
    'delete_language' => 'Eliminar idioma',
    'language_translation' => 'Traducción de idioma',
    'delete_language_key' => 'Borrar clave de idioma',
  ),
  'Ajustes' => array(
    'receipt_template' => 'Plantilla de recibo',
    'read_user_preference' => 'Leer preferencia de usuario',
    'update_user_preference' => 'Actualizar preferencia de usuario',
    'filtrando' => 'filtrando',
    'language_sync' => 'Sincronización de idioma',
    'copia de seguridad' => 'Copia de seguridad de la base de datos',
    'restaurar' => 'Restaurar base de datos',
    'reiniciar' => 'Reiniciar',
    'show_purchase_price' => 'Mostrar precio de compra',
    'show_profit' => 'Mostrar ganancias',
    'show_graph' => 'Mostrar gráfico',
  ),
);
?>

<h4 class="sub-title">
  <?php echo trans('text_update_title'); ?>
</h4>

<form class="form-horizontal" id="user-group-form" action="user_group.php" method="post">
  
  <input type="hidden" id="action_type" name="action_type" value="UPDATE">
  <input type="hidden" id="group_id" name="group_id" value="<?php echo $usergroup['group_id']; ?>">
  
  <div class="box-body">
    <div class="form-group">
      <label for="name" class="col-sm-3 control-label">
        <?php echo sprintf(trans('label_name'), null); ?>
      </label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="name" ng-model="usergroupName" ng-init="usergroupName='<?php echo $usergroup['name']; ?>'" value="<?php echo $usergroup['name']; ?>" name="name" required>
      </div>
    </div>

    <div class="form-group">
      <label for="slug" class="col-sm-3 control-label">
        <?php echo sprintf(trans('label_slug'), null); ?><i class="required">*</i>
      </label>
      <div class="col-sm-7">
        <?php if ( $usergroup['slug'] == 'admin' ||  $usergroup['slug'] == 'cashier'): ?>
          <input type="hidden" class="form-control" id="slug" name="slug" value="<?php echo $usergroup['slug'];?>">
          <h4><b><?php echo $usergroup['slug'];?></b></h4>
        <?php else:?>
          <input type="text" class="form-control" id="slug" value="<?php echo $usergroup['slug'] ? $usergroup['slug'] : "{{ categoryName | strReplace:' ':'_' | lowercase }}"; ?>" name="slug" required<?php echo $usergroup['slug'] == 'admin' ||  $usergroup['slug'] == 'cashier' ? ' disabled' : null;?>>
        <?php endif;?>
      </div>
    </div>

    <hr>

    <div class="form-group mb-0">
      <div class="col-sm-12">
        <h4 class="pull-left">
          <b><?php echo ('Permisos'); ?></b>
        </h4>
        <button data-form="#user-group-form" data-datatable="#user-group-list" class="btn btn-info btn-lg pull-right user-group-update" name="btn_edit_user" data-loading-text="Updating...">
          <span class="fa fa-fw fa-pencil"></span>
          <?php echo trans('button_update'); ?>
        </button>
      </div>
    </div>

    <hr>

    <?php $the_permissions = unserialize($usergroup['permission']); ?>

    <div class="form-group permission-list">
      <?php foreach ($permissions as $type => $lists) : ?>
      <div class="col-sm-3">
        <h4>
          <input type="checkbox" id="<?php echo $type; ?>_action" onclick="$('.<?php echo $type; ?>').prop('checked', this.checked);">
          <label for="<?php echo $type; ?>_action">
            <?php echo str_replace('_', ' ', $type); ?>
          </label>
        </h4>
        <div class="filter-searchbox">
            <input ng-model="search_<?php echo $type; ?>" class="form-control" type="text" placeholder="<?php echo trans('search'); ?>">
        </div>
        <div class="well well-sm permission-well">
          <div filter-list="search_<?php echo $type; ?>">
            <?php foreach ($lists as $key => $name) : ?>
              <div>
                <input type="checkbox" class="<?php echo $type; ?>" id="<?php echo $key; ?>" value="true" name="access[<?php echo $key; ?>]"<?php echo isset($the_permissions['access'][$key]) ? ' checked' : null; ?>>
                <label for="<?php echo $key; ?>"><?php echo ucfirst($name); ?></label>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="box-footer">
    <div class="form-group">
      <div class="col-sm-12 text-center">
        <button data-form="#user-group-form" data-datatable="#user-group-list" class="btn btn-lg btn-info user-group-update" name="btn_edit_user" data-loading-text="Updating...">
          <span class="fa fa-fw fa-pencil"></span>
          <?php echo trans('button_update'); ?>
        </button>
      </div>
    </div>
  </div>
</form>