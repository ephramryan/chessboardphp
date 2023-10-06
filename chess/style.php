<style>
    .board .row {
    width: 24em;
    display: flex;
}
.board .row > div {
    width: 3em;
    height: 3em;
}

.board .white {
    background-color: #c2c2c2;
}
.board .black {
    background-color: #525252;
}

.board .white:hover {
    background-color: purple;
}

.board .black:hover {
    background-color: purple;
}

.board {
    width: 24rem;
    margin-top: 2rem;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0 10px 13px -7px rgba(0,0,0,.4), 0 0 5px 2px transparent;
    border: solid black 1px;
}

.kingqueen {
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 0.4rem;
    width: 50%;
    height: 2rem;
    cursor: pointer;
}

.kingqueen:hover {
    transform: scale(1.1);
}

</style>