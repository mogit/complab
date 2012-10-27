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

save s11.txt s11
save s12.txt s12
save s13.txt s13
save s21.txt s21
save s22.txt s22
save s23.txt s23
save s31.txt s31
save s32.txt s32
save s33.txt s33
save s41.txt s41
save s42.txt s42
save s43.txt s43
