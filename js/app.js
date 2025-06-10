function showTab(tabId) {
  const tabs = document.querySelectorAll('.tab');
  tabs.forEach(tab => tab.style.display = 'none');
  document.getElementById(tabId).style.display = 'block';
}

document.getElementById('bookingForm').addEventListener('submit', function(e) {
  e.preventDefault();
  alert('Booking Successful!');
});

document.getElementById('foodForm').addEventListener('submit', function(e) {
  e.preventDefault();
  alert('Food Ordered!');
});

document.getElementById('sosForm').addEventListener('submit', function(e) {
  e.preventDefault();
  alert('SOS Sent!');
});
