<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/init.php';

$fname = get_val('fname');
$lname = get_val('lname');
$uname = get_val('uname');
$pword = get_val('pword');

$fname = trim($fname);
$lname = trim($lname);
$uname = trim($uname);

$_inps_arr = [$fname, $lname, $uname];

# edit
$mail = get_val("email") ?? '';
$desc = get_val('description') ?? '';
$tid = intval(get_val('id') ?? 0);
$havAccess = isAdmin() || get_session('uid') == $tid;
$is_edit = !!$tid && $havAccess;
$tuq = $is_edit ? get_users(cols: 'count(*), username, lastname, firstname, description, mail', condition: "id = $tid")->fetchAll(PDO::FETCH_ASSOC)[0] : null;
$tu = $is_edit ? $tuq['count(*)'] : null;
$uename = $tu ? $tuq['username'] : null;
$prev_pword = $is_edit ? get_users(cols: 'password', condition: "id=$tid")->fetchColumn() : null;
# edit end

$TEMP = validateUsername($uname);

$_COND = !array_any($_inps_arr, fn($val) => strlen($val) == 0) && ($tu || $pword != '') && $TEMP;

$_SUBMITED = setted('signup');

$_BECAUSE = !$TEMP ? 'User Name' : null;
$_WHY = !$TEMP ? 'User Name Should Be Starts with a alphabet and only can contains: [A-Z, a-z, 0-9, _, -] remember minimun size is 3 and maximum is 25' : null;

if (!$_SUBMITED) {
    $uname = $tu ? $tuq['username'] : '';
    $lname = $tu ? $tuq['lastname'] : '';
    $fname = $tu ? $tuq['firstname'] : '';
    $desc = $tu ? $tuq['description'] : '';
    $mail = $tu ? $tuq['mail'] : '';
}

// PROCESSOR
$__PROCESS__CALLBACK__ = function () {
    global $tu, $tid;
    global $fname, $lname, $uname, $pword, $mail, $desc, $prev_pword;
    if ($tu) {
        update_users(
            condition: "id = $tid",
            set: "username= ?, lastname= ?, password= ?, mail= ?, description= ?",
            params: [$uname, $lname, $pword !== '' ? hash_pass($pword) : $prev_pword, $mail, $desc],
        );
        set_prof_image($tid, 'profimg');
        set_pbg_image($tid, 'pbg');
        loginWith($uname, $pword);
        redirect('/profile/');
    }
    add_user($fname, $lname, $uname, $pword);
};

$__PROCESS__SUCCESS__ = function () {
    global $uname, $pword;
    loginWith($uname, $pword);

    redirect('/');
};

$__PROCESS__FAILED__ = $__DEFAULT__PROCESS_FAILED;
