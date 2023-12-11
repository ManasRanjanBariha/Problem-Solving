package december;

class ElementAppearingMoreThan25percentInSortedArray {
    public int findSpecialInteger(int[] arr) {
        int n=arr.length;
        int m=n/4;
        int x=arr[0];
        int count=1;
        for(int i=1;i<n;i++)
        {
            if(x==arr[i])
            {
                count++;
            }
            else{
                count=1;
            }
            if(count >m){
                return arr[i]; 
            }
            x=arr[i];
        }
        return x;
    }
}