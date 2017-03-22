function addRemove(arr) {
    let collection = [];

    for (let i = 0; i < arr.length; i++) {
        let splittedArray = arr[i].split(' ');

        if (splittedArray[0] === 'add') {
            collection.push(Number(splittedArray[1]))
        }
        else if (splittedArray[0] === 'remove') {
            if (Number(splittedArray[1]) < collection.length) {
                //collection[Number(splittedArray[1])] = -10001;
                collection.splice(Number(splittedArray[1]), 1);
            }
        }
    }

    for (let i = 0; i < collection.length; i++) {
        console.log(collection[i]);

    }
}

