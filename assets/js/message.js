'use stric'


var messageDiv = document.getElementById('message')
var messageDivInfo = document.getElementById('message-info')

function activateMessage(){
    messageDiv.style.display = 'flex'
    messageDivInfo.style.display = 'none'
}

function closeMessage(){
    messageDiv.style.display = 'none'
}


function activateMessageInfo(){
    messageDivInfo.style.display = 'block'
    messageDiv.style.display = 'none'
}

function closeMessageInfo(){
    messageDivInfo.style.display = 'none'
}
