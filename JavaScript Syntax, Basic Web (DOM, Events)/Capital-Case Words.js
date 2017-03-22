function solve(arr) {
    let resultArray = [];
    let separator = /[^\w]+/;

    for (let i = 0; i < arr.length; i++) {
        let currentSplittedArray = arr[i].split(separator);

        for (let j = 0; j < currentSplittedArray .length; j++) {
            let upperCaseWord = currentSplittedArray[j].toUpperCase();

            if(upperCaseWord === currentSplittedArray[j] && currentSplittedArray[j]!== ''){
                resultArray.push(currentSplittedArray[j]);
            }

        }
    }

    console.log(resultArray.join(', '));
}

