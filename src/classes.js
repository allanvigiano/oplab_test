export class Node {
    constructor(data, next = null) {
        this.data = data;
        this.next = next;
    }
};

export class Data {
    //This class can be changed to accept any type of data
    constructor(value) {
        this.value = value;
    }
}