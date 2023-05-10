function setDate() {

    let date;
    let dateTime;
  
    date = new Date;
    dateTime = date.toISOString().split("T")[0];

    alert(dateTime);
}

setDate()