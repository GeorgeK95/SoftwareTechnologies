function solve(str) {
    let collection = [{}];

    for (let i = 0; i < str.length; i++) {
        let test = JSON.parse(str[i]);

        let name = test.name;
        let age = test.age;
        let date = test.date;

        collection.push({
            Name: name,
            Age: age,
            Date: date
        });

    }

    for (let person of collection) {
        for (let property of Object.keys(person)) {
            console.log(`${property}: ${person[property]}`)
        }
    }


}
