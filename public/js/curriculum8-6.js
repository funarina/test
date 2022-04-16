function Check() {
    var choice = window.confirm('削除すると復元できません。\n本当に削除しますか？');
    if (choice){
        return true;
    }
    else{
        return false;
    }
}