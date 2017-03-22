function keyValuePairs(arr) {
    let dict = {};

    for (let i = 0; i < arr.length; i++) {
        let splittedArr = arr[i].split(' ');

        if (splittedArr[1] !== undefined) {
            dict[splittedArr[0]] = splittedArr[1];
        }
    }
    if (dict.hasOwnProperty(arr[arr.length - 1])) {
        console.log(dict[arr[arr.length - 1]]);
    } else {
        console.log("None");
    }
}


