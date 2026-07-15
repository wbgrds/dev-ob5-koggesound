<link href="/includes/plugins/google/scheduling-button-script.css" rel="stylesheet">
<script src="/includes/plugins/google/scheduling-button-script.js" async></script>
<!-- Google Calendar Appointment Scheduling begin -->
<script>
(function() {
  var target = document.currentScript;
  window.addEventListener('load', function() {
    
    calendar.schedulingButton.load({
      url: '<?php echo $cal;?>',
      color: '#039BE5',
      label: 'Kalender',
      target: document.getElementById('cal')
    });
    
    setTimeout(() => {

// Select the button adjacent to the div
const button = document.getElementById('cal').nextElementSibling;

      // Add inline styles to the button as the script adds inline styles only
      if (button) {
          button.innerHTML = "<span class='material-icons'>edit_calendar</span>R&uuml;ckruf vereinbaren";
          button.style.backgroundColor = 'transparent';
          button.style.color = 'var(--light-text)';
          button.style.padding = '10px 20px';
          button.style.border = '1px solid var(--dark-border)';
          button.style.borderRadius = '7px';
          button.style.width = '296px';
      }
    });
  });
})();
</script>
<!-- end Google Calendar Appointment Scheduling -->

<!-- Google Maps  begin -->
<script>
(function() {
  var target = document.currentScript;
  window.addEventListener('load', function() {
    
    calendar.schedulingButton.load({
      url: '<?php echo $maps;?>',
      color: '#039BE5',
      label: 'Standort',
      target: document.getElementById('maps')
    });
    
    setTimeout(() => {

// Select the button adjacent to the div
const button = document.getElementById('maps').nextElementSibling;

      // Add inline styles to the button as the script adds inline styles only
      if (button) {
          button.innerHTML = "<span class='material-icons'>location_on</span>Standort";
          button.style.backgroundColor = 'transparent';
          button.style.color = 'var(--light-text)';
          button.style.padding = '10px 20px';
          button.style.border = '1px solid var(--dark-border)';
          button.style.borderRadius = '7px';
          button.style.width = '296px';

      }
    });
  });
})();
</script>
<!-- end Google Maps  -->
