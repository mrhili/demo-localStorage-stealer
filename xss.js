var url = 'http://localhost/server/conn.php';
var title = 'token';
var data = localStorage.getItem(title);
var xhr = new XMLHttpRequest();
xhr.open('POST', url, true);
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
var params = 'title=' + encodeURIComponent(title) + '&data=' + encodeURIComponent(data);
xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
        // Request completed and response received successfully
        console.log('Data sent successfully');
    }else{
console.log('Data NOT sent');
}
};
xhr.send(params);