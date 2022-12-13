jQuery(function($) {
  'use strict';

  var $calendar = $('.calendar');

  /* datepicker */
  if ($calendar.length) {
    $calendar.each(function() {
      var $this = $(this);
      var dateFormatString = 'DD.MM.YYYY';
      var minDate = $this.data('no-min-date') ? 0 : new Date();
      var maxDate = $this.data('no-mix-date') ? 0 : new Date().getFullYear() + 50;

      $this.daterangepicker({
        "singleDatePicker": true,
        autoUpdateInput: false,
        minDate: minDate,
        maxDate: maxDate,
        "locale": {
          "format": dateFormatString,
          "separator": ".",
          "firstDay": 1
        }
      });

      $this.on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format(dateFormatString));
        $(this).closest('.input-field-wrapper ').addClass('value');
      });

      $this.on('show.daterangepicker', function(ev, picker) {
        var calendarWidth = $(this).outerWidth();
        $('.daterangepicker .drp-calendar').css({
          'width': calendarWidth
        });
        $('.daterangepicker').addClass('active');
        $(this).closest('.input-wrapper').addClass('active');
      });

      $this.on('hide.daterangepicker', function() {
        $('.daterangepicker').removeClass('active');
      });
    });
  }
});