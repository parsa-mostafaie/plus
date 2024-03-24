<?php
date_default_timezone_set('Asia/Tehran');

if (!isset ($db)) {
    $db = new PDO('mysql:dbname=php_app;charset=utf8', 'root', '');
}

function searchCondition($searchInput, ...$colLike)
{
    $where = ''; //? Conditions to find user
    $sval = '1 = 1'; //? What to search?

    if ($searchInput && $searchInput != '') {
        $sval = '%' . get_val('search') . '%';
        for ($i = 0; $i < count($colLike); $i++) {
            $col = $colLike[$i];
            $op = $i == 0 ? 'AND (' : 'OR';
            $last = ($i + 1) == count($colLike) ? ')' : '';
            $where .= " $op $col LIKE ? $last";
        }
    }

    return [$where, $sval];
}

function exec_q($q, $p, $fetch_b = false)
{
    global $db;

    $query = $db->prepare($q);

    $ex = $query->execute($p);

    return $fetch_b ? $query : $ex;
}


function insert_q($tbl, $keys, $vals, $params)
{
    return exec_q(
        "INSERT INTO $tbl ($keys) VALUES ( $vals )",
        $params
    );
}

// SELECT $cols FROM $tbl INNER JOIN $join_tbl ON $join_query WHERE $condition GROUP BY $groupby HAVING $having ORDER BY $order LIMIT $lim
function select_q($tbl, $cols, $join_tbl = null, $join_query = null, $condition = null, $groupby = null, $having = null, $order = null, $lim = null, $p = [])
{
    $join = $join_tbl && $join_query ? "INNER JOIN" . $join_tbl . " ON $join_query" : '';
    $cond = $condition ? "WHERE $condition" : '';
    $gb = $groupby ? "GROUP BY $groupby" : '';
    $having = $having ? "HAVING $having" : '';
    $ob = $order ? "ORDER BY $order" : '';
    $lm = $lim ? "LIMIT $lim" : '';

    $query = "SELECT $cols FROM $tbl $join $cond $gb $having $ob $lm";

    return exec_q(
        $query,
        $p,
        true
    );
}

function delete_q($tbl, $condition, $params = [])
{
    return exec_q("DELETE FROM $tbl WHERE $condition", $params);
}

function update_q($tbl, $condition, $set, $params = [])
{
    return exec_q("UPDATE $tbl SET $set WHERE $condition", $params);
}

// Pagination
function PaginationQuery($per_page, $page, $fetchMode, ...$SEL_PARAMS)
{
    $SEL = $SEL_PARAMS;

    $SEL['cols'] = 'COUNT(*)';

    $count = select_q(...$SEL)->fetchColumn(0);

    // Pagination Main
    $page = intval($page);

    $pages = ceil($count / $per_page);

    if ($page < 1) {
        $page = 1;
    }

    if ($page > $pages) {
        $page = $pages;
    }

    $off = ($page - 1) * $per_page;

    $SEL_PARAMS['lim'] = "$per_page OFFSET $off";

    $mn = select_q(...$SEL_PARAMS);

    return ['page_count' => $pages, 'res' => $mn->fetchAll($fetchMode), 'current' => $page, 'count' => $count, 'offset' => $off];
}

