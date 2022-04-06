function generateKey() {
    function randInt(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min) + min);
    }

    let stringPool = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
    let parts = 5;
    let partLength = 4;
    let result = [];

    for (let part = 0; part < parts; part++) {
        let elem = "";
        for (let partElem = 0; partElem < partLength; partElem++) {
            elem += stringPool[randInt(0, stringPool.length)];
        }
        result.push(elem);
    }

    let key = result.join("-");
    console.log(key);
}