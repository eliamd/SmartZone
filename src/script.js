console.log('hey');
const trigg = document.getElementById('close');
const target = document.getElementById('notif');

trigg.addEventListener('click', function handleClick(event) {
  target.remove();
});
