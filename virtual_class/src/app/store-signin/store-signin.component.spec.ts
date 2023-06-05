import { ComponentFixture, TestBed } from '@angular/core/testing';

import { StoreSigninComponent } from './store-signin.component';

describe('StoreSigninComponent', () => {
  let component: StoreSigninComponent;
  let fixture: ComponentFixture<StoreSigninComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [StoreSigninComponent]
    });
    fixture = TestBed.createComponent(StoreSigninComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
