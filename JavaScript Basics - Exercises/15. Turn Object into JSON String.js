function solve(arr) {
    let collection = {};

    for (let line of arr) {
        let currentSplittedArray = line.split(' -> ');

        let key = currentSplittedArray[0];
        let value = currentSplittedArray[1];

        if (!isNaN(value)) {
            value = Number(value);
        }

        collection[key] = value;
    }

    let json = JSON.stringify(collection);
    console.log(json);
}
