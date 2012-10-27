x=[0:1:50];
y1=binopdf(x,50,0.3);
y2=poisspdf(x,15);
y3=normpdf(x,15,sqrt(10.5));
z1=[x;y1];
z2=[x;y2];
z3=[x;y3];
z1=z1';
z2=z2';
z3=z3';
save y1.txt z1
save y2.txt z2
save y3.txt z3 
