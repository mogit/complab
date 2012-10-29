s11=binornd(50,0.3,1000,1);
s12=poissrnd(15,1000,1);
s13=normrnd(15,sqrt(10.5),1000,1);
s21=binornd(50,0.3,10000,1);
s22=poissrnd(15,10000,1);
s23=normrnd(15,sqrt(10.5),10000,1);
s31=binornd(50,0.3,100000,1);
s32=poissrnd(15,100000,1);
s33=normrnd(15,sqrt(10.5),100000,1);
s41=binornd(50,0.3,1000000,1);
s42=poissrnd(15,1000000,1);
s43=normrnd(15,sqrt(10.5),1000000,1);
x1=[0:1:50];
x2=[-3:1:50];
h11=hist(s11,x1);
h12=hist(s12,x1);
h13=hist(s13,x2);
h21=hist(s21,x1);
h22=hist(s22,x1);
h23=hist(s23,x2);
h31=hist(s31,x1);
h32=hist(s32,x1);
h33=hist(s33,x2);
h41=hist(s41,x1);
h42=hist(s42,x1);
h43=hist(s43,x2);

h11=h11';
h12=h12';
h13=h13';
h21=h21';
h22=h22';
h23=h23';
h31=h31';
h32=h32';
h33=h33';
h41=h41';
h42=h42';
h43=h43';

save s11.txt h11
save s12.txt h12
save s13.txt h13
save s21.txt h21
save s22.txt h22
save s23.txt h23
save s31.txt h31
save s32.txt h32
save s33.txt h33
save s41.txt h41
save s42.txt h42
save s43.txt h43
