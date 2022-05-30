<?php

use App\Models\Employee;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});
// Home > User Listing
Breadcrumbs::for('employee.index', function (BreadcrumbTrail $trail):void {
    $trail->parent('home');
    $trail->push('User Listing', route('employee.index'));
});

Breadcrumbs::for('employee.show', function (BreadcrumbTrail $trail, Employee $employee) {
    $trail->parent('employee.index');
    $trail->push($employee->id, route('employee.show', $employee));
});

Breadcrumbs::for('employee.create', function (BreadcrumbTrail $trail) {
    $trail->parent('employee.index');
    $trail->push('Create User', route('employee.create'));
});

Breadcrumbs::for('employee.edit', function (BreadcrumbTrail $trail,Employee $employee) {
    $trail->parent('employee.index');
    $trail->push('Edit User', route('employee.edit',$employee));
});

Breadcrumbs::after(function (BreadcrumbTrail $trail) {
    $page = (int) request('page', 1);
    
    if ($page > 1) {
        $trail->push("Page {$page}", null, ['current' => false]);
    }
});