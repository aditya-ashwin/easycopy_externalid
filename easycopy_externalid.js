(function($, _, ts) {

    $(window).on('crmLoad', function(event) {
        // External Identifier
        $('.crm-contact_external_identifier_label', event.target).parent().each(function() {
            $(this).append('<i title="' + ts('Copy to clipboard') + '" class="fa fa-clipboard crm-easycopy-button crm-easycopy-externalId" aria-hidden="true"></i>');
          });
        // Must be mouseup to stopPropagation from crmFormInline
        // c.f. templates/CRM/Contact/Page/View/Summary.js
        $('.crm-easycopy-externalId', event.target).on('mouseup', function(event) {
            event.preventDefault();
            event.stopPropagation();
            $(this).addClass('crm-easycopy-animated');
            $(this).parent().find('.crm-contact_external_identifier_label').each(function() {
              var txt = $(this).text().trim();
              navigator.clipboard.writeText(txt);
            });
            return false;
          });

        $('.crm-easycopy-button', event.target).on('animationend', function(event) {
            $(this).removeClass('crm-easycopy-animated');
          });
    });
})(CRM.$, CRM._, CRM.ts('easycopy_externalid'));