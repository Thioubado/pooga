<?php
use Kahlan\Plugin\Stub;
use Test\Demo\Demo;


describe( "Tuto GA", function () {
	describe( 'On a stubbed method', function () {

		it( "stub the return of a method", function () {

			$demo = new Demo();
			expect( $demo )->toBeAnInstanceOf( '\Test\Demo\Demo' );

			// Squeeze la function random() de Demo
			allow( $demo )->toReceive( 'randoma' )->andReturn( 3 );
			expect( $demo->randoma() )->toEqual( '3' );

			// Une autre façon de squeezer la function random() de Demo
			Stub::on( $demo )->method( 'randoma', function () {
				return '3';
			} );
			expect( $demo->randoma() )->toBe( '3' );

		} );

		it( "should get an Exception if random() (called method) get more than 1", function () {
			expect( function () {
				$demo = new Demo();
				Stub::on( $demo )->method( 'random', function () {
					return 2;
				} );
				$demo->randomFail();
			} )->toThrow();
		} );

		it( "stub a complete class", function () {


			expect( function () {

				$demo = new Demo();
				Stub::on( \Test\Demo\User::class )->method( 'save', function () {
					return FALSE; // La 'vraie' method User->save() retourne TRUE
					// Ce qui n'envoie pas une exception mais une string
				} );
				$demo->saveUser( 123 );
			} )->toThrow();

		} );


	} );
} );
