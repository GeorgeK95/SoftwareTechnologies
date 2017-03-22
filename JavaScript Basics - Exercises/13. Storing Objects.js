function solve(arr) {
    let collection = [];
    for (let i = 0; i < arr.length; i++) {
        let text = arr[i].split(' -> ');

        let name = text[0];
        let age = text[1];
        let mark = text[2];

        collection.push({
            Name: name,
            Age: age,
            Grade: mark
        })

    }

    for (let person of collection) {
        for (let property of Object.keys(person)) {
            console.log(`${property}: ${person[property]}`)
        }
    }
}

//solve(['Pesho -> 13 -> 6.00']);