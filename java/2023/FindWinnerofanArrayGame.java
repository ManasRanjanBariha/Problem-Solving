// 1535

class Solution {
    public int getWinner(int[] arr, int k) {
        if(k==1)
        {
            return Math.max(arr[1],arr[0]);
        }
        if(k > arr.length)
        {
            return Arrays.stream(arr).max().getAsInt();
        }
        int cur=arr[0];
        int count=0;
        for(int i=1;i<arr.length;i++)
        {
            if(cur > arr[i])
            {
                count++;
            }
            else{
                cur=arr[i];
                count=1;
            }
            if(count==k)
            {
                break;
            }
        }
        return cur;
    }
}