const edite_btn = document.querySelector('.edite_btn');
const delete_btn = document.querySelector('.delete_btn');
// const affichePlusInfo = document.querySelector('.affichePlusInfo');


edite_btn.addEventListener('click', function() {
    plusInfo.classList.add('affichePlusInfo');
});

delete_btn.addEventListener('click', function() {
    plusInfo.classList.remove('affichePlusInfo');
});