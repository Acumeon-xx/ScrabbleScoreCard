create table player(
    gameid
    name
    date
    finalscore
);

create table game(
    gameid
    turn
    word
    dblletter
    dblword
    tplletter
    tplword
    wordscore
);

create table stats (
    gameid
    maxwordlength
    maxwordscore
    avgwordlenght
    avgwordscore
    wins
    losses
)
