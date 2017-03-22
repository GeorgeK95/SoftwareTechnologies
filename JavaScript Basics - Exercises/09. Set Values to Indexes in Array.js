function sss(arr) {
    let collection = [];
    let counter = Number(arr[0]);

    for (let i = 1; i < arr.length; i++) {
        let splitted = arr[i].split(' ');
        let index = Number(splitted[0]);
        let value = Number(splitted[2]);

        collection[index] = value;
    }
    for (let i = 0; i < counter; i++) {
        if (collection[i] === undefined) {
            console.log(0);
        } else
            console.log(collection[i]);
    }

}

