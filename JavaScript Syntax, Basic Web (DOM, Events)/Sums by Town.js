function solve(str) {
    let dictionary = {};

    for (let i = 0; i < str.length; i++) {
        let line = JSON.parse(str[i]);
        let town = line.town;
        let income = Number(line.income);

        if (dictionary[town] === undefined) {
            dictionary[town] = income;
        } else
            dictionary[town] += income;
    }

    let towns = Object.keys(dictionary).sort();
    for (let town of towns) {
        console.log(`${town} -> ${dictionary[town]}`);
    }
}


