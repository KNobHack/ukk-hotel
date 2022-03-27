/// <reference types="cypress" />

let correct_password = '123456789';
let correct_username = 'admin';
let worng_password = '123';
let worng_username = 'adaman';

describe('Login Page', function () {
	it('load the page successfully', function () {
		cy.visit('petugas')
		cy.get('#alert').should('not.exist')
	})

	describe('Invalid Inputs', function () {
		describe('Not providing username', function () {
			it('form is repopulated', function () {
				cy.get('[name=username]').clear();
				cy.get('[name=password]').type(worng_password);
				cy.get('[name=remember_me]').check();
				cy.get('#form').submit();

				cy.get('[name=username]').should('have.value', '');
				cy.get('[name=password]').should('have.value', worng_password);
				cy.get('[name=remember_me]').should('be.checked');
			})

			it('has invalid username alert', function () {
				cy.get('[name=username]').should('have.class', 'is-invalid')
				// .and('contain.text', 'username')
			})
		})

		describe('Not providing password', function () {
			it('form is repopulated', function () {
				cy.get('[name=username]').type(worng_username);
				cy.get('[name=password]').clear();
				cy.get('[name=remember_me]').check();
				cy.get('#form').submit();

				cy.get('[name=username]').should('have.value', worng_username);
				cy.get('[name=password]').should('have.value', '');
				cy.get('[name=remember_me]').should('be.checked');
			})

			it('has invalid passowrd alert', function () {
				cy.get('[name=password]').should('have.class', 'is-invalid')
				// .and('contain.text', 'password')
			})
		})

	})

	describe('Worng Credentials', function () {
		it('form is repopulated', function () {
			cy.get('[name=username]').clear();
			cy.get('[name=password]').clear();

			cy.get('[name=username]').type(worng_username);
			cy.get('[name=password]').type(worng_password);
			cy.get('[name=remember_me]').check();

			cy.get('#form').submit();

			cy.get('[name=username]').should('have.value', worng_username);
			cy.get('[name=password]').should('have.value', worng_password);
			cy.get('[name=remember_me]').should('be.checked');
		})

		it('has worng password alert', function () {
			cy.get('#alert').should('exist')
		})

	})

	describe('Correct Credentials', function () {
		it('redirect corectly', function () {
			cy.get('[name=username]').clear();
			cy.get('[name=password]').clear();

			cy.get('[name=username]').type(correct_username);
			cy.get('[name=password]').type(correct_password);

			cy.get('[name=remember_me]').check();
			cy.get('#form').submit();

			cy.url().should('eq', Cypress.config('baseUrl') + '/dashboard')
		})
	})
})