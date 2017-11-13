function solve(lines) {
    let arr = new Array(Number(lines[0]));

    for (let i = 0; i < arr.length; i++) {
        arr[i] = 0;
    }

    for (let i = 1; i < lines.length; i++) {
        let tokens = lines[i].split(" - ");
        let index = Number(tokens[0]);
        let value = Number(tokens[1]);

        arr[index] = value;
    }

    for (let num of arr) {
        console.log(num);
    }
}

solve([2, "0 - 5", "0 - 6", "0 - 7"]);