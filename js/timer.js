function ShowTime() {
    var nowtime   = new Date();
    var nowTimeSec   = Math.floor(nowtime.getTime() / 1000);
    var rangeTime = endtime - nowTimeSec;
    masDate   = { 'year':Math.floor(rangeTime / 31556926 % 12),
                  'week':Math.floor(rangeTime / 604800 % 52),
                  'day' :Math.floor(rangeTime / 86400 % 7),
                  'hour':Math.floor(rangeTime/ 3600 % 24),
                  'min' :Math.floor(rangeTime / 60 % 60),
                  'sec' :rangeTime % 60 }

    setElement ('tYear', 'year');
    setElement ('tWeek', 'week');
    setElement ('tDay', 'day');
    setElement ('tHour', 'hour');
    setElement ('tMin', 'min');
    setElement ('tSec', 'sec');
}
// добавление "ведущего" нуля
function addZero(num) {
    if (showZero) {
        if (num < 10) { num = '0' + num; }
    }
    return num;
}
// скрытие элемента
function hideElement(elem) {
    divObj = document.getElementById(elem);
    divObj.parentNode.style.display = 'none';
}
// отображение элемента
function showElement(elem) {
    divObj = document.getElementById(elem);
    divObj.parentNode.style.display = 'inline';
}
//заполнение  элемента
function setElement (elem,setValue) {
    divObj = document.getElementById(elem);
    divObj.innerHTML = addZero(masDate[setValue]);
}
