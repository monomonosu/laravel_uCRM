const nl2br = (str) => {
    var res = str.replace(/\r\n/g, "<br>");
    res = res.replace(/(\n|\r)/g, "<br>");
    return res;
}

const getToday = () => {
    const today = new Date();
    const year = today.getFullYear();
    const month = ('0' + today.getMonth() + 1).slice(-2);
    const day = ('0' + today.getDay()).slice(-2);
    return year + "-" + month + "-" + day;
}

export { nl2br, getToday }
