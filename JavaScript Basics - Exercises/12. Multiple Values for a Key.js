function keyMultipleValuesPairs(arr) {
    let dict = {};

    for (let i = 0; i < arr.length; i++) {
        if (i !== arr.length - 1) {
            let splittedArr = arr[i].split(' ');

            if (!dict.hasOwnProperty(splittedArr[0])) {//splittedArr[1] !== undefined
                dict[splittedArr[0]] = new Array();
            }
            dict[splittedArr[0]].push(splittedArr[1]);
        }

    }
    if (dict.hasOwnProperty(arr[arr.length - 1])) {
        for (let a of dict[arr[arr.length - 1]]) {
            console.log(a);
        }

    } else {
        console.log("None");
    }
}









