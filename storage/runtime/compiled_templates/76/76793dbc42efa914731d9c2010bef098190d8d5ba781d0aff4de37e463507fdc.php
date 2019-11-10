<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* shop/style.css */
class __TwigTemplate_99e4c91fe5c0d3404ed9e76035a7f3956554a1dc331cdbcb3e681aabeb99566f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        craft\helpers\Template::beginProfile("template", "shop/style.css");
        // line 1
        echo "/* General
–––––––––––––––––––––––––––––––––––––––––––––––––– */

body {
  font-size: 16px;
  line-height: 1.6;
  font-weight: 400;
  font-family: \"HelveticaNeue\", \"Helvetica Neue\", Helvetica, Arial, sans-serif;
  color: #222;
}

h1 {
  margin-top: 0;
  padding-top: 0.4em;
  margin-bottom: 0.5em;
  font-size: 2.25rem;
}

h2 {
  margin-top: 1em;
  margin-bottom: 0.5em;
  font-size: 1.875rem;
}

h3 {
  margin-top: 1em;
  margin-bottom: 0.5em;
  font-size: 1.5rem;
}

h4 {
  margin-top: 1em;
  margin-bottom: 0.5em;
  font-size: 1.25rem;
}

a {
  color: #0d78f2;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

p {
  margin-bottom: 20px;
}

hr {
  border-top: 1px solid #eee;
  margin: 40px 0;
}

table {
  width: 100%;
  line-height: 2em;
}

table th,
table td {
  text-align: left;
  padding: 20px 0;
  border-bottom: 1px solid #ddd;
}

/* Forms
–––––––––––––––––––––––––––––––––––––––––––––––––– */

input[type=\"text\"],
input[type=\"textarea\"],
input[type=\"number\"],
input[type=\"password\"],
input[type=\"tel\"] {
  border: 1px solid #ddd;
  padding: 8px 12px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}

select {
  border: 1px solid #ddd;
  background: #fff;
  height: 38px;
}

label {
  display: block;
  margin-top: 1em;
  margin-bottom: 0.5em;
}

label input[type=\"checkbox\"] {
  position: relative;
  top: -2px;
  margin-right: 10px;
}

fieldset {
  margin-bottom: 20px;
  border: 0;
  padding: 0;
}

fieldset legend {
  font-weight: bold;
}

.field {
  margin-bottom: 20px;
}

/* Buttons
–––––––––––––––––––––––––––––––––––––––––––––––––– */

/* .button,
input[type=\"submit\"],
button[type=\"submit\"] {
  padding: 8px 12px;
  background: #fff;
  color: #000;
  border: 1px solid #ddd;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  text-decoration: none;
}

a.button:hover {
  text-decoration: none;
}

a.button-primary,
input.button-primary {
  background: #da5a17;
  color: #fff;
  border-color: transparent;
}

.buttons {
  margin-bottom: 20px;
} */

/* Empty orders
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.empty-index {
  color: #aaa;
  padding: 100px 0;
  text-align: center;
  line-height: 1.5em;
}

.empty-index i {
  color: #ddd;
  font-size: 100px;
  margin-bottom: 20px;
}

/* Card
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.card {
  border: 1px solid #eee;
  padding: 20px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  margin-bottom: 20px;
}

/* Nav
–––––––––––––––––––––––––––––––––––––––––––––––––– */

nav > ul > li {
  display: inline-block;
  position: relative;
  white-space: nowrap;
}

nav > ul > li > a {
  display: inline-block;
  padding: 8px 12px;
  text-decoration: none;
  color: #555;
}

nav > ul > li > a:hover {
  text-decoration: none;
  color: #0d78f2;
}

nav > ul > li > ul > li > a {
  display: block;
  padding: 12px 24px;
  text-decoration: none;
  color: #0d78f2;
}

nav > ul > li.account:hover > ul {
  display: block;
  position: absolute;
  right: 0;
  top: 34px;
  z-index: 1;
  background: #fff;
  box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.11),
    0 5px 15px 0 rgba(0, 0, 0, 0.08);
  text-align: left;
}

nav > ul > li > ul {
  display: none;
}

/* Steps
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.steps {
  min-width: 600px;
}
.steps ul {
  display: flex;
  display: -webkit-flex;
  margin-bottom: 0;
  padding: 0;
}
.steps ul li {
  list-style: none;
  display: block;
  flex: 1;
}
.steps ul li {
  color: #aaa;
}
.steps ul li a {
  color: #aaa;
  text-decoration: none;
  display: inline-block;
  padding: 8px;
}
.steps ul li.done {
  color: #da5a17;
  opacity: 0.5;
}
.steps ul li.done a {
  color: #da5a17;
}
.steps ul li.sel {
  color: #da5a17;
  opacity: 1;
}
.steps ul li.sel a {
  color: #da5a17;
}
.steps .meter {
  position: relative;
  border: 1px solid #bbb;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  padding: 3px;
  margin-bottom: 10px;
}
.steps .meter > span {
  display: block;
  height: 8px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
  background-color: #da5a17;
  position: relative;
  overflow: hidden;
}

@media (max-width: 750px) {
  .steps ul {
    display: block;
    margin-left: 24px;
  }
  .steps ul li {
    list-style: decimal;
    display: list-item;
  }
  .steps .meter {
    display: none;
  }
}

/* Payment source form
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.paymentSource-form .grid {
  display: flex;
  margin: 0px -10px;
}

.paymentSource-form .grid .item {
  flex-grow: 1;
  margin: 10px;
}

.paymentSource-form input {
  width: 100%;
}
.paymentSource-form .multitext .multitextrow {
  display: flex;
  margin: 0px -10px;
}
.paymentSource-form .multitext .multitextrow .text {
  margin: 10px;
}

/* Badge
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.badge {
  position: relative;
  top: -8px;
  /* background: #DA5A17; */
  padding: 2px 8px;
  border-radius: 10px;
  color: #fff;
  font-size: 0.8em;
}

/* Commerce Design
–––––––––––––––––––––––––––––––––––––––––––––––––– */

#header .brand svg {
  width: 252px;
  height: 42px;
}

img.logo {
  width: 400px;
}

img.product {
  width: 100%;
}

.has-error input {
  border: 1px solid #da5a17;
}

.has-error .help-block {
  color: #da5a17;
}

ul.address-data {
  padding: 0;
}

ul.address-data li {
  margin-bottom: 4px;
}

.address-select {
  background: #fff;
  border: 1px solid #eee;
  margin-bottom: 1em;
  position: relative;
  border-radius: 4px;
}
.address-select .radio input {
  margin: 0 5px 0 0;
  position: relative;
  top: -1px;
}

.address-select .radio {
  padding: 14px 15px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.address-select ul.address-data {
  display: inline;
}
.address-select ul.address-data li {
  display: inline;
}
.address-select ul.address-data li {
  display: inline;
}
.address-select ul.address-data li strong {
  display: none;
}
.address-select ul.address-data li span[data-key=\"firstName\"] {
  font-weight: bold;
}
.address-select ul.address-data li span[data-key=\"lastName\"] {
  font-weight: bold;
}

.address-select .actions {
  float: right;
  padding: 14px 15px;
  font-size: 0.9em;
}
.address-select .actions ul {
  margin: 0;
}
.address-select .actions ul li {
  display: inline-block;
  margin: 0 0 0 1em;
}
.address-select .actions ul li a {
  color: #999;
  text-decoration: underline;
}

.address-select .body {
  padding: 14px;
}

.order-address ul.address-data li {
  list-style: none;
}

.hidden {
  display: none;
}

.product.row {
  border-bottom: 1px solid #fafafa;
  margin-bottom: 2.5rem;
}

@media (max-width: 767px) {
  .product svg {
    max-height: 200px;
  }
}

.product-details {
  padding-top: 2rem;
}

.address-card {
  background-color: transparent;
  border-radius: 5px;
  padding: 20px;
  border: 1px solid #e1e1e1;
  margin-bottom: 15px;
  position: relative;
}
.address-card form {
  display: inline;
  margin: 0;
}
.address-card .edit {
  position: absolute;
  top: 20px;
  right: 20px;
}
.address-card ul {
  list-style: none;
}

.shipping-select {
  background: #fff;
  border: 1px solid #eee;
  margin-bottom: 1em;
  position: relative;
  border-radius: 4px;
}
.shipping-select input {
  margin: 0 5px 0 0;
}
.shipping-select label {
  margin: 0;
  padding: 10px 14px;
}
.shipping-select .price {
  float: right;
  padding: 4px 4px;
  font-size: 0.9em;
  font-weight: normal;
}

.order-review {
  background-color: transparent;
  margin-bottom: 15px;
  position: relative;
  padding-top: 20px;
  padding-bottom: 20px;
}
.order-review .address-select {
  border: 0;
  background: transparent;
}

table.cart td {
  border-bottom: 0;
  border-top: 1px solid #ddd;
}

table.cart tr.adjustment td:first-child {
  border-top: 0;
}

/* Grid Addresses
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.grid-addresses {
  width: 100%;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-auto-rows: 1fr;
  grid-gap: 30px;
  color: #444;
}
";
        // line 0
        craft\helpers\Template::endProfile("template", "shop/style.css");
    }

    public function getTemplateName()
    {
        return "shop/style.css";
    }

    public function getDebugInfo()
    {
        return array (  556 => 0,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/* General
–––––––––––––––––––––––––––––––––––––––––––––––––– */

body {
  font-size: 16px;
  line-height: 1.6;
  font-weight: 400;
  font-family: \"HelveticaNeue\", \"Helvetica Neue\", Helvetica, Arial, sans-serif;
  color: #222;
}

h1 {
  margin-top: 0;
  padding-top: 0.4em;
  margin-bottom: 0.5em;
  font-size: 2.25rem;
}

h2 {
  margin-top: 1em;
  margin-bottom: 0.5em;
  font-size: 1.875rem;
}

h3 {
  margin-top: 1em;
  margin-bottom: 0.5em;
  font-size: 1.5rem;
}

h4 {
  margin-top: 1em;
  margin-bottom: 0.5em;
  font-size: 1.25rem;
}

a {
  color: #0d78f2;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

p {
  margin-bottom: 20px;
}

hr {
  border-top: 1px solid #eee;
  margin: 40px 0;
}

table {
  width: 100%;
  line-height: 2em;
}

table th,
table td {
  text-align: left;
  padding: 20px 0;
  border-bottom: 1px solid #ddd;
}

/* Forms
–––––––––––––––––––––––––––––––––––––––––––––––––– */

input[type=\"text\"],
input[type=\"textarea\"],
input[type=\"number\"],
input[type=\"password\"],
input[type=\"tel\"] {
  border: 1px solid #ddd;
  padding: 8px 12px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}

select {
  border: 1px solid #ddd;
  background: #fff;
  height: 38px;
}

label {
  display: block;
  margin-top: 1em;
  margin-bottom: 0.5em;
}

label input[type=\"checkbox\"] {
  position: relative;
  top: -2px;
  margin-right: 10px;
}

fieldset {
  margin-bottom: 20px;
  border: 0;
  padding: 0;
}

fieldset legend {
  font-weight: bold;
}

.field {
  margin-bottom: 20px;
}

/* Buttons
–––––––––––––––––––––––––––––––––––––––––––––––––– */

/* .button,
input[type=\"submit\"],
button[type=\"submit\"] {
  padding: 8px 12px;
  background: #fff;
  color: #000;
  border: 1px solid #ddd;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  text-decoration: none;
}

a.button:hover {
  text-decoration: none;
}

a.button-primary,
input.button-primary {
  background: #da5a17;
  color: #fff;
  border-color: transparent;
}

.buttons {
  margin-bottom: 20px;
} */

/* Empty orders
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.empty-index {
  color: #aaa;
  padding: 100px 0;
  text-align: center;
  line-height: 1.5em;
}

.empty-index i {
  color: #ddd;
  font-size: 100px;
  margin-bottom: 20px;
}

/* Card
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.card {
  border: 1px solid #eee;
  padding: 20px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  margin-bottom: 20px;
}

/* Nav
–––––––––––––––––––––––––––––––––––––––––––––––––– */

nav > ul > li {
  display: inline-block;
  position: relative;
  white-space: nowrap;
}

nav > ul > li > a {
  display: inline-block;
  padding: 8px 12px;
  text-decoration: none;
  color: #555;
}

nav > ul > li > a:hover {
  text-decoration: none;
  color: #0d78f2;
}

nav > ul > li > ul > li > a {
  display: block;
  padding: 12px 24px;
  text-decoration: none;
  color: #0d78f2;
}

nav > ul > li.account:hover > ul {
  display: block;
  position: absolute;
  right: 0;
  top: 34px;
  z-index: 1;
  background: #fff;
  box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.11),
    0 5px 15px 0 rgba(0, 0, 0, 0.08);
  text-align: left;
}

nav > ul > li > ul {
  display: none;
}

/* Steps
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.steps {
  min-width: 600px;
}
.steps ul {
  display: flex;
  display: -webkit-flex;
  margin-bottom: 0;
  padding: 0;
}
.steps ul li {
  list-style: none;
  display: block;
  flex: 1;
}
.steps ul li {
  color: #aaa;
}
.steps ul li a {
  color: #aaa;
  text-decoration: none;
  display: inline-block;
  padding: 8px;
}
.steps ul li.done {
  color: #da5a17;
  opacity: 0.5;
}
.steps ul li.done a {
  color: #da5a17;
}
.steps ul li.sel {
  color: #da5a17;
  opacity: 1;
}
.steps ul li.sel a {
  color: #da5a17;
}
.steps .meter {
  position: relative;
  border: 1px solid #bbb;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  padding: 3px;
  margin-bottom: 10px;
}
.steps .meter > span {
  display: block;
  height: 8px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
  background-color: #da5a17;
  position: relative;
  overflow: hidden;
}

@media (max-width: 750px) {
  .steps ul {
    display: block;
    margin-left: 24px;
  }
  .steps ul li {
    list-style: decimal;
    display: list-item;
  }
  .steps .meter {
    display: none;
  }
}

/* Payment source form
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.paymentSource-form .grid {
  display: flex;
  margin: 0px -10px;
}

.paymentSource-form .grid .item {
  flex-grow: 1;
  margin: 10px;
}

.paymentSource-form input {
  width: 100%;
}
.paymentSource-form .multitext .multitextrow {
  display: flex;
  margin: 0px -10px;
}
.paymentSource-form .multitext .multitextrow .text {
  margin: 10px;
}

/* Badge
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.badge {
  position: relative;
  top: -8px;
  /* background: #DA5A17; */
  padding: 2px 8px;
  border-radius: 10px;
  color: #fff;
  font-size: 0.8em;
}

/* Commerce Design
–––––––––––––––––––––––––––––––––––––––––––––––––– */

#header .brand svg {
  width: 252px;
  height: 42px;
}

img.logo {
  width: 400px;
}

img.product {
  width: 100%;
}

.has-error input {
  border: 1px solid #da5a17;
}

.has-error .help-block {
  color: #da5a17;
}

ul.address-data {
  padding: 0;
}

ul.address-data li {
  margin-bottom: 4px;
}

.address-select {
  background: #fff;
  border: 1px solid #eee;
  margin-bottom: 1em;
  position: relative;
  border-radius: 4px;
}
.address-select .radio input {
  margin: 0 5px 0 0;
  position: relative;
  top: -1px;
}

.address-select .radio {
  padding: 14px 15px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.address-select ul.address-data {
  display: inline;
}
.address-select ul.address-data li {
  display: inline;
}
.address-select ul.address-data li {
  display: inline;
}
.address-select ul.address-data li strong {
  display: none;
}
.address-select ul.address-data li span[data-key=\"firstName\"] {
  font-weight: bold;
}
.address-select ul.address-data li span[data-key=\"lastName\"] {
  font-weight: bold;
}

.address-select .actions {
  float: right;
  padding: 14px 15px;
  font-size: 0.9em;
}
.address-select .actions ul {
  margin: 0;
}
.address-select .actions ul li {
  display: inline-block;
  margin: 0 0 0 1em;
}
.address-select .actions ul li a {
  color: #999;
  text-decoration: underline;
}

.address-select .body {
  padding: 14px;
}

.order-address ul.address-data li {
  list-style: none;
}

.hidden {
  display: none;
}

.product.row {
  border-bottom: 1px solid #fafafa;
  margin-bottom: 2.5rem;
}

@media (max-width: 767px) {
  .product svg {
    max-height: 200px;
  }
}

.product-details {
  padding-top: 2rem;
}

.address-card {
  background-color: transparent;
  border-radius: 5px;
  padding: 20px;
  border: 1px solid #e1e1e1;
  margin-bottom: 15px;
  position: relative;
}
.address-card form {
  display: inline;
  margin: 0;
}
.address-card .edit {
  position: absolute;
  top: 20px;
  right: 20px;
}
.address-card ul {
  list-style: none;
}

.shipping-select {
  background: #fff;
  border: 1px solid #eee;
  margin-bottom: 1em;
  position: relative;
  border-radius: 4px;
}
.shipping-select input {
  margin: 0 5px 0 0;
}
.shipping-select label {
  margin: 0;
  padding: 10px 14px;
}
.shipping-select .price {
  float: right;
  padding: 4px 4px;
  font-size: 0.9em;
  font-weight: normal;
}

.order-review {
  background-color: transparent;
  margin-bottom: 15px;
  position: relative;
  padding-top: 20px;
  padding-bottom: 20px;
}
.order-review .address-select {
  border: 0;
  background: transparent;
}

table.cart td {
  border-bottom: 0;
  border-top: 1px solid #ddd;
}

table.cart tr.adjustment td:first-child {
  border-top: 0;
}

/* Grid Addresses
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.grid-addresses {
  width: 100%;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-auto-rows: 1fr;
  grid-gap: 30px;
  color: #444;
}
", "shop/style.css", "/var/www/dev.mavenshake.com/templates/shop/style.css");
    }
}
